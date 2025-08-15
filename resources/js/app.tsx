// resources/js/app.tsx
import React from 'react';
import ReactDOM from 'react-dom/client';

// Import CSS utama (jika ada)
import '../css/app.css';

// Import component utama
import App from './pages/app';

const rootElement = document.getElementById('app');
if (rootElement) {
    const root = ReactDOM.createRoot(rootElement);
    root.render(
        <React.StrictMode>
            <App />
        </React.StrictMode>
    );
}
