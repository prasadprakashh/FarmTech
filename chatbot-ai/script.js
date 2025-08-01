const API_KEY = 'AIzaSyBU_I1KNnUZBbQTjo6XV2PIiRHDQGBynXM';
const WEATHER_API_KEY = '559f34335b664f12ca58fa8a9bd0d205'; // Replace with your OpenWeatherMap API key
const API_URL = 'https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash-latest:generateContent';
const WEATHER_API_URL = 'https://api.openweathermap.org/data/2.5/weather';

const chatMessages = document.getElementById('chat-messages');
const userInput = document.getElementById('user-input');
const sendButton = document.getElementById('send-button');

async function getUserLocation() {
    return new Promise((resolve, reject) => {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(
                (position) => resolve(position.coords),
                () => reject('Location access denied or unavailable.')
            );
        } else {
            reject('Geolocation is not supported by your browser.');
        }
    });
}

async function fetchWeather(location) {
    try {
        const response = await fetch(`${WEATHER_API_URL}?q=${location}&appid=${WEATHER_API_KEY}&units=metric`);
        if (!response.ok) throw new Error('Failed to fetch weather data');
        const data = await response.json();
        return `Weather in ${data.name}: ${data.weather[0].description}, Temperature: ${data.main.temp}°C, Humidity: ${data.main.humidity}%`;
    } catch (error) {
        console.error('Weather API Error:', error);
        return 'Sorry, I could not fetch the weather data. Please check the city name and try again.';
    }
}

async function fetchWeatherByCoords(lat, lon) {
    try {
        const response = await fetch(`${WEATHER_API_URL}?lat=${lat}&lon=${lon}&appid=${WEATHER_API_KEY}&units=metric`);
        if (!response.ok) throw new Error('Failed to fetch weather data');
        const data = await response.json();
        return `Weather in ${data.name}: ${data.weather[0].description}, Temperature: ${data.main.temp}°C, Humidity: ${data.main.humidity}%`;
    } catch (error) {
        console.error('Weather API Error:', error);
        return 'Sorry, I could not fetch the weather data based on your location.';
    }
}

async function getWeatherByUserLocation() {
    try {
        const coords = await getUserLocation();
        return await fetchWeatherByCoords(coords.latitude, coords.longitude);
    } catch (error) {
        return error;
    }
}

async function generateResponse(prompt) {
    if (prompt.toLowerCase().includes('weather in')) {
        const location = prompt.replace(/weather in/i, '').trim();
        return await fetchWeather(location);
    } else if (prompt.toLowerCase().includes('my weather')) {
        return await getWeatherByUserLocation();
    }

    const response = await fetch(`${API_URL}?key=${API_KEY}`, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({
            contents: [{ parts: [{ text: prompt }] }]
        })
    });

    if (!response.ok) throw new Error('Failed to generate response');
    const data = await response.json();
    return data.candidates[0].content.parts[0].text;
}

function addMessage(message, isUser) {
    const messageElement = document.createElement('div');
    messageElement.classList.add('message', isUser ? 'user-message' : 'bot-message');
    
    const profileImage = document.createElement('img');
    profileImage.classList.add('profile-image');
    profileImage.src = isUser ? 'user.jpg' : 'bot.jpg';
    profileImage.alt = isUser ? 'User' : 'Bot';
    
    const messageContent = document.createElement('div');
    messageContent.classList.add('message-content');
    messageContent.textContent = message;
    
    messageElement.appendChild(profileImage);
    messageElement.appendChild(messageContent);
    chatMessages.appendChild(messageElement);
    chatMessages.scrollTop = chatMessages.scrollHeight;
}

async function handleUserInput() {
    const userMessage = userInput.value.trim();
    if (userMessage) {
        addMessage(userMessage, true);
        userInput.value = '';
        sendButton.disabled = true;
        userInput.disabled = true;

        try {
            const botMessage = await generateResponse(userMessage);
            addMessage(botMessage, false);
        } catch (error) {
            console.error('Error:', error);
            addMessage('Sorry, I encountered an error. Please try again.', false);
        } finally {
            sendButton.disabled = false;
            userInput.disabled = false;
            userInput.focus();
        }
    }
}

sendButton.addEventListener('click', handleUserInput);
userInput.addEventListener('keypress', (e) => {
    if (e.key === 'Enter' && !e.shiftKey) {
        e.preventDefault();
        handleUserInput();
    }
});

// Request location on page load
window.onload = async () => {
    await getUserLocation();
};
