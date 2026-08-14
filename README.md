Company Profile

A. A Company Profile Website is a professional informational website that serves as a digital introduction to your business. It's like an interactive business card or online brochure that tells visitors:

- Who you are (your company's identity)
- What you do (products/services)
- Why you matter (your value proposition)
- How to reach you (contact information)

B. Objectives Accompmlished: 
1. Create Multiple Application Routes
2. Build Reusable Blade Layouts
3. Connect Routes to Controllers
5. Understand Separation of Concerns Using MVC
6. Publish a Professional GitHub Repository

C. MVC Architecture
MVC is a way to organize code for easier debugging. The main reason is so that the models are seperated from the design. While the controller handles the communication between them.

Laravel Applies this architecture so that everything has their own place, and different people can work more efficiently together, and debugging becomes easier as the application scales.

MVC eliminates spaghetti code by giving every piece of code a specific home, with models handling data, views handling display, and controllers managing the logic in between, making the project clean, structured, and easy to navigate.

Multiple developers can work on the same project simultaneously without conflicts because frontend designers can focus on views while backend developers work on controllers and models, all without stepping on each other's toes.

Development speeds up significantly because different team members can work on different components at the same time, allowing parallel progress instead of waiting for one person to finish everything sequentially.

You can completely redesign the look and feel of your website by simply modifying the view files without touching the business logic or database code, ensuring that design changes never break the underlying functionality.

The same controller or model can be reused across multiple views, meaning the same product data can be displayed on the website, mobile app, or API without rewriting any code, saving time and reducing duplication.

Data is better protected because the controller acts as a gatekeeper between the user and the database, ensuring that sensitive information is never directly exposed to the view and that all inputs are properly validated before reaching the model.

Adding new features becomes much easier because the modular structure of MVC allows you to extend functionality without breaking existing code, so you can simply add new controllers, models, or views while the rest of the application continues working perfectly.

New developers like me whose unfamiliar with laravel can quickly understand the project structure because MVC follows a predictable pattern where they know exactly where to find routes, where to add new features, and how everything connects together, making onboarding faster and less overwhelming.

Basically the flow of the whole architecture process is: 
Browser → Route → Controller → Blade View → Response to Browser

D. Laravel Routing 
Routing?
- Routing is like a support that directs website visitors to the right page based on the URL they type in their browser.

Named Routes
- Named routes are like giving a shortcut name to a URL so you can easily refer to it anywhere in your code without typing the full web address.

GET Request
- GET requests are what happens when you simply want to look at a page by clicking a link or typing a URL, and they don't change anything on the server.

ROUTE definitions 
- Route definitions are the lines of code that tell Laravel what to do when someone visits a specific URL, like "when someone goes to /services, show them the services page."







