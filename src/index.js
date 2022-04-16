import React from 'react';
import { createRoot } from 'react-dom/client'; // for react 18

import App from './App';

const root = createRoot(document.getElementById("root")); // for react 18
root.render(<App />);
