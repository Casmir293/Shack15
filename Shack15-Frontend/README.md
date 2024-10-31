# SHACK15 Metrics Dashboard - Frontend

![Project Image](/public/imgs/sample-img.png)

## Overview

This project is the frontend component of the SHACK15 Metrics Dashboard. Built with Nuxt.js, TypeScript, Chart.js, and Tailwind CSS, it provides an interactive, visually engaging interface to display community metrics for SHACK15. Users can view essential stats such as total members, monthly active members, event attendance, and communication engagement, with data fetched from a Laravel backend API. It can be accessed live at [SHACK15 Metrics Dashboard](https://shack15.vercel.app).

## Project Structure

- Nuxt.js: Vue-based framework for server-side rendering and static site generation.
- TypeScript: Ensures type safety and enhanced code quality throughout the project.
- Chart.js: Visualization library used for creating interactive charts.
- TailwindCSS: Utility-first CSS framework for styling components and layouts.

## Features

- Metrics Summary Cards: High-level statistics such as total members and active members.
- Interactive Charts: Visualize time-series data for event attendance and engagement rates.
- Event History Table: Displays the last three events with detailed attendance and engagement data.
- Responsive Design: Optimized for both desktop and mobile screens.
- Live Data Fetching: Real-time updates from the Laravel backend API hosted on https://shack15.casmir.dev.

## Installation

To get started with the project, follow these steps:

1. Clone the repository:

   ```bash
   git clone https://github.com/Casmir293/Shack15/tree/main/Shack15-Frontend

   ```

2. Navigate to the project directory:

   ```bash
   cd Shack15-Frontend

   ```

3. Install dependencies:

   ```bash
   npm install

   ```

4. Environment variables:

- API_BASE_URL=https://shack15.casmir.dev/api

5. Run the development server:

   ```bash
   npm run dev

   ```

## Contributing

Contributions are welcome! If you have any suggestions or improvements, feel free to create a pull request or open an issue.
