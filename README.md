# VTRACK - Vehicle Management System

## Overview
In this modern era all can visualize the revolution in the vehicle industry and it is an integral part of today’s lifestyle. 
During these 5 years there is a huge increase in the number of vehicle users. But it’s sure that all vehicle users are unaware about the management and maintenance of their own vehicles. 
Most people own at least one vehicle. However it is a fact that no one pays much attention to things related to vehicles. 
Therefore, there is a need to coordinate all matters related to vehicles. Here comes the importance of this application which makes the user aware of their vehicle. 
The goal of this project is to maintain such coordination. This way one can do everything related to their vehicle. The main purpose of this project is to make it available through a single application. 
This application should provide all the relevant information and make them aware about the expenses incurred due to that vehicle, whether the vehicle is profitable or lost to them, 
how much tax should be paid and so on.

V Track System has four types: Admin, Users, Workshop, Spare Parts and Fuel. There is only one Admin in this Application. 
The application is intended to do different major tasks i.e. Track, Order and Search.Track Management keeps track of all the vehicle related transactions.
It includes New Vehicle Registration, Listing Vehicles, Checking Availability, Track Vehicles, Order, Calculation, and History.
While Fleet Management keeps track of vehicles. It includes Repair and Maintenance Logs, Fuel Logs, Lubricant Logs, Distance Logs, Tax Logs, Tax and Logs details, Test Logs, Parts Changed Records and Vehicle etc. 
It also keeps track of expenses and bills of the vehicles. Daily Reports can be generated on the basis of these input data collected by user’s different types of inputs. 
User may also print these details if he wants to. It has a Feedback Module where customers of the admin can give their feedback. A customer can also review in different firms.

The primary goal of this project is to coordinate all matters related to vehicles, making users aware of their vehicles' status, expenses, profitability, tax obligations, and more.

## Table of Contents
- [Overview](#overview)
- [Features](#features)
- [System Modules](#system-modules)
- [Installation](#installation)
- [Usage](#usage)
- [Screenshots](#screenshots)
- [Contributing](#contributing)
- [License](#license)
- [Acknowledgements](#acknowledgements)

## Features
- New Vehicle Registration
- Listing and Checking Availability of Vehicles
- Vehicle Tracking
- Order Management
- Expense Calculation and Tracking
- History and Logs Management
- Repair and Maintenance Logs
- Fuel and Lubricant Logs
- Distance and Tax Logs
- Parts Changed Records
- Daily Report Generation
- Feedback Module

## System Modules
The VTRACK system consists of four primary types:
1. **Admin**: The sole administrator of the application.
2. **Users**: Regular vehicle owners using the system for tracking and maintenance.
3. **Workshop**: Service providers managing repairs and maintenance.
4. **Spare Parts and Fuel**: Vendors supplying spare parts and fuel.

### Major Tasks
- **Track Management**: 
  - New Vehicle Registration
  - Listing Vehicles
  - Checking Availability
  - Tracking Vehicles
  - Ordering and Calculations
  - History Logs

- **Fleet Management**: 
  - Repair and Maintenance Logs
  - Fuel and Lubricant Logs
  - Distance Logs
  - Tax Logs
  - Test Logs
  - Parts Changed Records
  - Expense and Bill Tracking
  - Daily Reports and Printing

- **Feedback Module**: 
  - Collects feedback from users
  - Allows customers to review services

## Installation
To set up the VTRACK system locally, follow these steps:

1. **Clone the repository:**
    ```bash
    git clone https://github.com/your-username/vtrack-vehicle-management-system.git
    cd vtrack-vehicle-management-system
    ```

2. **Set up the environment:**
   - Ensure you have the necessary dependencies installed (Node.js, npm, etc.).
   - Install the required packages:
     ```bash
     npm install
     ```

3. **Database setup:**
   - Configure your database settings in the `.env` file.
   - Run the database migrations:
     ```bash
     npm run migrate
     ```

4. **Start the application:**
   ```bash
   npm start
