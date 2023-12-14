<?php

// -> commmande 1,N ( 1 User pour N order )
user(id, email, password, firstname, lastname, birthdate, adress, complements, postal_code, city, #id_order)

// -> contient, 1, N ( 1 Order pour order_line)
order(id reference, date, #order_line_id)

// -> contient, 1, N ( 1 Order_line pour category)
order_line(id, quantity, price, #product_id)

// -> fait partie de, N, N ( 1 Order pour order_line)
category(id, nom)

// -> est représenté par, 1, N ( 1 Order pour order_line)
product(id, name, description, price, #picture_id, #category_id)

picture(id, src, alt)

