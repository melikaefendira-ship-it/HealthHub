HealthHub

Project Description

HealthHub is a web application designed to help users track their daily health habits and personal wellness. Users will be able to manage their health profiles, record water intake, track physical activities, maintain a health journal, and monitor healthy habits.

Technology Stack

* Frontend: HTML, CSS, JavaScript
* Backend: PHP with FlightPHP
* Database: MySQL
* Database access: PHP PDO

Entities

The planned database contains the following entities:

1. User — stores user account information.
2. HealthProfile — stores personal health information.
3. DailyActivity — records physical activities and their duration.
4. WaterIntake — records daily water consumption.
5. HealthJournal — stores personal health journal entries.
6. HealthyHabit — tracks users’ healthy habits.

Entity Relationships

* One User has one HealthProfile.
* One User can have many DailyActivity records.
* One User can have many WaterIntake records.
* One User can have many HealthJournal entries.
* One User can have many HealthyHabit records.

The draft ER diagram is available in docs/erd.md.

User Roles

The application is planned to support at least two roles:

* User — manages personal health information and daily records.
* Admin — manages application data and administrative functions.

External API

The application plans to integrate a third-party API to provide useful nutrition information. The specific API and its implementation will be documented when the feature is developed.

Running the Project

The current milestone contains a static frontend prototype. Open the frontend folder in Visual Studio Code and run index.html using the Live Server extension.

Backend setup, database import, configuration, and API documentation will be added in later development stages.

Project Status

Milestone 1: Initial Setup, Static Frontend and Database Planning.