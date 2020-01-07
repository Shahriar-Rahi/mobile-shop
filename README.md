# mobile-shop
For e-commerce lab

I will be designing and developing a website for a mobile shop. The site will have
functionalities for site announcements, product handling, user
registration/authentication, and administrator only areas.
The mobile shop website will have six primary areas: (1) Homepage, (2) About
Page, (3) Products, (4) Contact, (5) User Profile, (6) Administrator Only.
• Homepage: The homepage will have an overview of the mobile shop,
site announcements, and login for both users and admin access. The site
announcements will be stored in a MySQL table. The most recent
announcement will be displayed on the homepage, but a link will point to a
page that displays all announcements ordered newest to oldest.
• About Page: This page will have basic information about the mobile
shop. This information will be obtained through speaking to managers at
the shop and collecting informational materials.
• Products: A list of products mainly featured and smartphones will be
displayed that can be filtered by category. The results should be able to
be sorted by name and price in both ascending and descending order. If
the site is for an organization, a list of services will be displayed. Products
will have a multi-page list view of multiple items as well as a detailed view
of an individual product. In the list view, each item will be a hyperlink to the
detailed view for that item. Products will be stored in MySQL table(s).
• Contact: The contact page will have a web form that may be used by the
user to communicate with the site administrator. The form must have the
following fields: (1) Text field for sender’s name, (2) Text field for return
email address, (3) dropdown menu for email subject, (4) text area for email
body. For the purposes of grading the functionality of the site, the contact
form will be sent to the email address provided for the return email
address. In other words, the “To:” and “From:” fields will both be the same
value, which is provided by the user.
• User Profile: User profiles will be stored in MySQL. If logged in, the
user should be able to edit their profile. The profile will include basic
information such as first name, last name, mailing address, and email
address. Additionally, top selling smartphones will be included. The user’s
current profile values will be pre-populated in the HTML form when editing
the profile.
• Administrator Only: The administrator area will have four functionalities:
(1) add and delete site announcements; (2) add, edit, and delete site
products and/or services; (3) add, edit, and delete product categories; and
(4) view and delete users. The administrator area should be accessible
with the username/password combination.
