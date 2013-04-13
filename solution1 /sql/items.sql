/* Tables and data for sample solution to assignment 1. */

/* Categories */

drop table if exists categories;

create table categories (
    id int not null auto_increment,
    name varchar(80) not null,
    summary varchar(80) not null,
    primary key (id),
    key (name)
);

insert into categories (name, summary)
    values
    ('Cameras', 'Photographic equipment, including lenses, etc.'),
    ('Computers', 'Desktop and laptop computers'),
    ('Smart phones', 'Apple iPhones, Google Android phones, etc.');


/* Items: only some columns shown */

drop table if exists items;

create table items (
    id int not null auto_increment,
    summary varchar(80) not null,
    details text default '',
    category int not null references categories(id),
    primary key (id)
);

insert into items (summary, details, category)
    values
    ("Canon PowerShot A590 IS",
     "Excellent budget point and shoot digital camera.
     8MP, 35-140mm f2.6-5.5 (35mm equivalent) lens.", 1),
    ("Canon EOS 450D",
     "Excellent entry-level digital 12.2MP SLR camera.
     Normally comes with EF-S 18-55mm f3.5-5.6 IS, 
     50-250mm f4-f5.6 IS, or better 18-85mm f4.0-5.6 IS USM lenses.", 1),
    ("Canon EOS 50D",
     "Excellent prosumer 15MP digital SLR camera.", 1),
    ("Canon EOS 5D Mark II",
     "Excellent full-frame professional digital SLR camera.", 1);


/* Variant definition of table items as actually required for the assignment. */

/*
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
*/
