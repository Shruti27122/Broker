# Broker - Property Search Project

## Overview

**Broker** is a property search project that allows users to search for properties around them. It is built using HTML and CSS for the front-end and MongoDB as the backend database. This project provides a user-friendly interface for property searching and viewing details.

## Features

- **Property Search:** Users can search for properties by specifying various search criteria such as location, property type, price range, and more.

- **Property Listings:** The project displays a list of properties that match the user's search criteria. Each listing includes essential details such as property type, price, location, and a brief description.

- **Property Details:** Users can click on a property listing to view more detailed information about the property, including high-quality images, property specifications, and contact information for the property owner or agent.

- **User Registration and Login:** Users can create accounts, log in, and save their favorite properties for later viewing.

- **Contact Property Owner/Agent:** Users can use a built-in messaging system to contact the property owner or agent directly for inquiries or appointments.

- **Map Integration:** The project integrates with maps to provide users with a visual representation of property locations and nearby amenities.

## Technologies Used

- **Front-end**:
  - HTML5: For structuring the web pages.
  - CSS3: For styling and layout design.
  - JavaScript: For dynamic and interactive features.

- **Back-end**:
  - MongoDB: As the NoSQL database for storing property listings and user data.
  - Node.js: As the server-side runtime environment.
  - Express.js: As the web application framework for handling routes and requests.

## Database Schema

The MongoDB database for the **Broker** project may have the following collections:

- **Users:** To store user registration and login information.
- **Properties:** To store property listings, including details like property type, price, location, and owner/agent contact information.
- **Messages:** To store user-to-user messages for property inquiries.

## Getting Started

To run the **Broker** project locally, follow these steps:

1. Clone the project repository:

   ```
   git clone <repository-url>
   ```

2. Install the necessary dependencies for the back-end (Node.js and Express.js).

3. Set up a MongoDB database and configure the connection in the project.

4. Start the server, and make sure it is connected to the database.

5. Open the project's front-end HTML and CSS files in a web browser or use a development server if required.

6. Begin searching for properties, registering, and exploring the project's features.

## Future Enhancements

- **User Reviews:** Allow users to leave reviews and ratings for properties they have visited.
- **Advanced Search:** Implement advanced search filters like square footage, number of bedrooms, etc.
- **Property Upload:** Enable property owners/agents to upload property listings with images and details.
- **Integration with External APIs:** Integrate with external services for additional property data such as school ratings, nearby restaurants, etc.
- **Responsive Design:** Optimize the project for mobile and tablet devices to enhance user experience.


Feel free to contribute and make improvements to the **Broker** project to create a valuable tool for property search and listing in your area!


# MongoDB PHP Library

![Tests](https://github.com/mongodb/mongo-php-library/workflows/Tests/badge.svg)
![Coding Standards](https://github.com/mongodb/mongo-php-library/workflows/Coding%20Standards/badge.svg)

This library provides a high-level abstraction around the lower-level
[PHP driver](https://github.com/mongodb/mongo-php-driver) (`mongodb` extension).

While the extension provides a limited API for executing commands, queries, and
write operations, this library implements a full-featured API similar to that of
other MongoDB drivers. It contains abstractions for client, database, and
collection objects, and provides methods for CRUD operations and common commands
(e.g. index and collection management).

If you are developing an application with MongoDB, you should consider using
this library, or another high-level abstraction, instead of the extension alone.

Additional information about the architecture of this library and the `mongodb`
extension may be found in
[Architecture Overview](https://php.net/manual/en/mongodb.overview.php).

## Documentation

 - https://docs.mongodb.com/php-library/
 - https://docs.mongodb.com/ecosystem/drivers/php/

## Installation

The preferred method of installing this library is with
[Composer](https://getcomposer.org/) by running the following from your project
root:

    $ composer require mongodb/mongodb

Additional installation instructions may be found in the
[library documentation](https://docs.mongodb.com/php-library/current/tutorial/install-php-library/).

Since this library is a high-level abstraction for the driver, it also requires
that the `mongodb` extension be installed:

    $ pecl install mongodb
    $ echo "extension=mongodb.so" >> `php --ini | grep "Loaded Configuration" | sed -e "s|.*:\s*||"`

Additional installation instructions for the extension may be found in its
[PHP.net documentation](https://php.net/manual/en/mongodb.installation.php).

## Reporting Issues

Issues pertaining to the library should be reported in the
[PHPLIB](https://jira.mongodb.org/secure/CreateIssue!default.jspa?project-field=PHPLIB)
project in MongoDB's JIRA. Extension-related issues should be reported in the
[PHPC](https://jira.mongodb.org/secure/CreateIssue!default.jspa?project-field=PHPC)
project.

For general questions and support requests, please use one of MongoDB's
[Technical Support](https://docs.mongodb.com/manual/support/) channels.

### Security Vulnerabilities

If you've identified a security vulnerability in a driver or any other MongoDB
project, please report it according to the instructions in
[Create a Vulnerability Report](https://docs.mongodb.org/manual/tutorial/create-a-vulnerability-report).

## Development

Development is tracked in the
[PHPLIB](https://jira.mongodb.org/projects/PHPLIB/summary) project in MongoDB's
JIRA. Documentation for contributing to this project may be found in
[CONTRIBUTING.md](CONTRIBUTING.md).
