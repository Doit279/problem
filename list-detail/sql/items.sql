drop table if exists categories;

create table categories (
    id int not null auto_increment,
    name varchar(80) not null,
    description text default '',
    primary key (id),
    key (name)
);

insert into categories (name, description)
    values
    ('Cameras', 'Photographic equipment, including lenses, etc.'),
    ('Computers', 'Desktop and laptop computers'),
    ('Smart phones', 'Apple iPhones, Google Android phones, etc.');

drop table if exists items;

create table items (
    id int not null auto_increment,
    name varchar(80) not null,
    description text default '',
    category int not null references categories(id),
    vendor varchar(80) default '',
    price decimal(10,2) not null,
    primary key (id),
    key (name)
);

insert into 'ld_items' ('name', 'description', 'category', 'vendor', 'price') values
('Elliatt Dress ', 'The Elliatt Dress has a high scoop neckline, lace cap sleeves and lace panelling on the front and the back. The Elliatt Dress features single button closure on the back and an asymmetrical hemline falling below the knees.', 1, 'Target', 19.99),
('Zooki Trouser', 'Slip into the Zooki Max Tux Trousers and instantly exude sleek sophistication. ', 1, 'Kmart', 20.55),
('Chloe Queen Bed ', 'Undeniably attractive yet overall simplistic in its design, the Chloe Queen Bed is an absolute must-have for any modern bedroom. Available in black, white or brown leather look vinyl to suit any existing bedroom décor, the Chloe comes in a double or queen. With a low base and short, sturdy legs, this wonderful bed is sure to last quite a long time, and remain strong and stable the entire time. For an instant favourite, look no further than the Chloe Queen Bed.\r\n', 3, 'Amart', 359.34),
('Scoop Neck Tee', 'Basic cotton t-shirt. The Scoop Neck Tee has a scoop neckline and a short sleeved design. The t-shirt has a soft 100% cotton composition and has a regular fit which falls to the hips.', 1, 'Big W', 10.00),
('Venice Dining Chair ', 'A contemporary styled chair, the Venice Dining Chair is available in walnut or white with a polyfoam seat upholstered in 100% polyester fabric. The Venice dining chair perfectly complements the Venice Dining Table.\r\n', 3, 'Amart', 100.00),
('Amani Tallboy ', 'With five large drawers for an enormous amount of storage space, and a beautiful high-gloss white finish, the Amani Tall Boy is the perfect combination of practicality and style, and is sure to be a favourite for years to come. Its wide base means that the tallboy is just as sturdy and strong as it is stylish, and this fantastic piece is available as a standalone item or as part of a bedroom suite.', 3, 'Amart', 150.99),
('Black Irish', 'A compelling, standout crime thriller for fans of Jo Nesbo, Tana French and Dennis Lehane. Harvard-educated Detective Absalom ''Abbie''Kearneyhas returned to ''The County'' - an Irish enclave inBuffalo,NY- to take care of her ageing father, legendary former cop John Kearney. In one ofAmerica''s most deprived and dilapidated cities, tensions run high and Abbie''s day job is never easy. But when it becomes apparent that a relentless and merciless killer has set to work, it''s about to get a lot harder. Faced with scenes of inconceivable violence, Abbie''s investigation takes her to the heart of this fiercely closed community. ', 2, 'BookStore', 20.00),
('The Storyteller', 'An astonishing novel about redemption and forgiveness from number-one bestselling author Jodi Picoult Sage Singer is a young woman who has been damaged by her past. Her solitary night work as a baker allows her to hide from the world and focus her creative energies on the beautiful bread she bakes. Yet she finds herself striking up an unlikely friendship. Josef Weber is a quiet, grandfatherly man, well respected in the community; everyone''s favourite retired teacher and Little League coach.One day he asks Sage for a favour: to kill him. Shocked, Sage refuses.\r\n', 2, 'BookStore', 10.00),
('Light', 'This is the sixth and final heart-stopping installment in the bestselling GONE series. It is an exceptional page-turner. Escapism just doesn''t get better than this. All eyes are on Perdido Beach. The barrier wall is now as clear as glass and life in the FAYZ is visible for the entire outside world to see. Life inside the dome remains a constant battle and the Darkness, away from watchful eyes, grows and grows...The society that Sam and Astrid has struggled so hard to build is about to be shattered for good. It''s the end of the FAYZ. But who will survive to see the light of day?', 2, 'BookStore', 40.00);
