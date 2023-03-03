.nav-item::after {
content: '';
display: block;
width: 0px;
height: 2px;
background: #ffffff;
transition: 0.2s;
}

.nav-item:hover::after {
width: 100%;
}

@media screen and (max-width: 1000px) {

ul.leftsidelist .nav-item,
.nav-brand {
display: none;
}
}