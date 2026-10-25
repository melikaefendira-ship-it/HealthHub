AGENTS.md

Project Description

HealthHub is a web application for tracking personal health information, daily activities, water intake, health journal entries, and healthy habits.

Technology Stack

* Frontend: HTML, CSS, JavaScript
* Backend: PHP with the FlightPHP framework for REST API development
* Database: MySQL
* Database access: PHP PDO
* API documentation: OpenAPI

These technologies are planned for the complete application. The current milestone focuses on the static frontend and database planning.

Architecture Rules

* Keep frontend and backend code separate.
* The frontend must contain only HTML, CSS, and JavaScript.
* The backend REST API must use PHP and FlightPHP.
* Use PHP PDO for database access.
* Use AJAX requests to communicate with the REST API when backend integration is implemented.
* Never commit secrets, database credentials, API keys, or JWT secrets.
* Follow the existing project structure and avoid unnecessary changes to working code.

Folder Structure

* frontend/ — frontend application
    * assets/ — static assets
    * css/ — stylesheets
    * js/ — JavaScript files
    * views/ — HTML page templates
    * index.html — main application entry point
* backend/ — REST API
    * routes/ — API routes
    * services/ — application logic
    * dao/ — database access
    * middleware/ — reusable middleware
    * config/ — application configuration
    * logs/ — application logs; must not be committed to Git
* docs/ — project documentation and ER diagram
* README.md — project overview and setup instructions
* AGENTS.md — project context and coding rules

Database Entities

The planned entities are:

* User
* HealthProfile
* DailyActivity
* WaterIntake
* HealthJournal
* HealthyHabit

The database design is documented in docs/erd.md.

Coding Conventions

* Use descriptive and consistent names for files, functions, variables, and classes.
* Keep functions focused on a single responsibility.
* Reuse common logic instead of duplicating it.
* Handle errors safely and return user-friendly messages.
* Keep documentation updated when project architecture changes.
* Test changes before considering them complete.

Security Requirements

The completed application must use JWT authentication, role-based authorization, reusable middleware, safe database access through PDO, and appropriate logging.

Sensitive configuration files and secrets must remain outside version control. Commit a configuration template instead of real credentials.

AI Assistant Rules

* Inspect existing files before modifying them.
* Do not claim that a feature is implemented unless the code confirms it.
* Explain important changes and their purpose.
* Do not overwrite or delete existing work without permission.
* Keep changes consistent with the assignment requirements.