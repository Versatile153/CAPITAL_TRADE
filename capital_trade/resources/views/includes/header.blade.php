<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Greens Group Interior</title>
    <link rel="stylesheet" href="./style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
	<style>
		@import url("https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Finlandica:ital,wght@0,400;0,500;1,400;1,500&display=swap");

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
body {
  font-family: "Finlandica", sans-serif;
}
header {
  display: flex;
  justify-content: space-between;
  padding: 20px;
}

a {
  text-decoration: none;
}

.logo-box {
  display: flex;
  align-items: center;
}

.text_logo {
  font-family: sans-serif;
  color: #eb6d06;
  font-size: 25px;
  margin-left: 10px;
}

.logo {
  width: 50px;
  height: 50px;
}

button {
  width: fit-content;
}

.menu-btn {
  background: transparent !important;
  border: none;
  outline: none;
  cursor: pointer;
}

.fa-solid {
  color: rgb(198, 236, 26);
}

.navigations {
  display: none;
  list-style: none;
}

.navigations.show {
  display: grid;
  position: absolute;
  right: 35px;
  top: 60px;
  height: 200px;
  background-color: blueviolet;
}

.navList {
  padding: 10px 40px;
  margin-right: 5px;
  /* background-color: rgb(100, 163, 247); */
  cursor: pointer;
}

.navList:hover {
  background-color: rgb(6, 1, 12);
}

.navList a {
    color: #fff;

}

.search {
  display: none;
}

.search_input {
  border: 1px solid rgb(238, 238, 194);
  outline: none;
  padding: 5px;
  border-radius: 20px;
  text-indent: 10px;
  background: transparent !important;
  color: #fff;
}

.search_input::placeholder {
  font-weight: 700;
  font-size: 15px;
  color: rgb(228, 199, 38);
}

header,
.intro_container {
  background-image: url("https://images.unsplash.com/photo-1548247813-39fd73105a43?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTZ8fHRyYWRlJTIwc2hvd3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60");
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
}

.intro_container {
  min-height: 500px;
  padding: 60px 20px;
}

.company_brief {
  margin-top: 20px;
  color: rgb(238, 240, 228);
}

.action_box {
  margin-top: 50px;
  display: flex;
  align-items: center;
}

.social {
  margin-right: 40px;
}

.fa-brands {
  color: #fff;
}

.hint {
  font-size: 30px;
  color: #f5f2eb;

}

.hint span {
  color: rgb(233, 69, 9);
}

.social_link {
  margin-right: 5px;
}

.explore-btn {
  background-color: rgb(214, 126, 11);
  color: #e9eaeb;

  padding: 10px 20px;
  border-radius: 10px;
  width: fit-content;
  font-weight: bolder;
}

.services {
  background-image: url("https://images.unsplash.com/photo-1595729257407-e4b69b4c2650?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8YnJvd24lMjBiYWNrZ3JvdW5kfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60");
  background-size: cover;
}

.service_list_container {
  width: 80%;
  margin: 0 auto;
  padding: 100px 0;
}

.category {
  margin-bottom: 30px;
}

.service_label {
  color: rgb(198, 236, 26);
  font-size: 3em;
}

.service_category {
  margin-top: 30px;
}

.service_type {
  font-size: 30px;
  color: aliceblue;
}

.service_brief {
  margin: 10px 0 20px 0;
  color: whitesmoke;
}

.service_learn_more {
  color: rgb(198, 236, 26);
  text-decoration-line: underline;
  text-decoration-color: rgb(198, 236, 26);
  text-decoration-style: solid;
  text-decoration-thickness: 3px;
  text-underline-offset: 3px;
  letter-spacing: 2px;
}

.case-study {
  background: url("https://images.unsplash.com/photo-1491602917301-a0d24c462b8b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8cGlua3klMjBzd2VhcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60");
  background-size: cover;
  background-position: center right;
}

.case-box {
  padding: 150px 20px;
  background-color: rgba(255, 255, 255, 0.8);
}

.case h3 {
  font-size: 30px;
  margin-bottom: 30px;
  font-weight: 700;
}

.case h4 {
  font-size: 20px;
}

.case p {
  margin: 10px 0 40px 0;
}

.view-case {
  border: 2px solid rgb(100, 100, 219);
  padding: 5px 15px;
  border-radius: 20px;
  font-weight: 700;
  color: rgb(104, 0, 0);
}

.view-case:hover {
  border-color: goldenrod;
}

.contact {
  background-image: url("https://images.unsplash.com/photo-1579548122080-c35fd6820ecb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fGJsdWUlMjBiYWNrZ3JvdW5kc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60");
  padding: 150px 0;
  background-size: cover;
  width: 100%;
}

.contact h3 {
  color: #fff;
  font-weight: 700;
  margin-bottom: 10px;
  font-size: 25px;
}

.contact-container {
  width: 90%;
  margin: 0 auto;
}

form {
  width: 100%;
  display: grid;
}

.submit-btn {
  padding: 8px 20px;
  border: none;
  outline: none;
  background-color: whitesmoke;
  font-weight: 700;
  border-radius: 20px;
  width: 100%;
  margin-top: 10px;
  cursor: pointer;
}

.submit-btn:hover {
  background-color: rgb(228, 199, 38);
  color: #fff;
}

.email_input {
  padding: 5px 10px 5px 0;
  border: none;
  outline: none;
  border-bottom: 2px solid white;
  background-color: transparent !important;
  width: 100%;
  font-size: 20px;
  color: #fff;
}

.email_input::placeholder {
  color: #fff;
  font-weight: 700;
}

footer {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  padding: 20px;
  background-image: url("https://images.unsplash.com/photo-1548247813-39fd73105a43?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTZ8fHRyYWRlJTIwc2hvd3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60");
  background-size: cover;
  gap: 1em;
}

footer > div {
  width: 100%;
  margin-bottom: 20px;
}

footer h3 {
  margin-bottom: 10px;
  color: rgb(198, 236, 26);
}

footer ul {
  list-style: none;
}

footer li {
  margin-bottom: 10px;
}

footer li a {
  color: rgb(255, 255, 255);
}

.ft-social {
  margin: 10px 0;
}

.copyright {
  font-size: 15px;
  color: #ffff;
}

@media screen and (min-width: 760px) {
  header {
    display: grid;
    grid-template-columns: 30% 40% 20% 10%;
  }

  .text_logo {
    font-size: 25px;
  }

  .navigations {
    display: flex;
  }

  .navList {
    padding: 10px 20px;

    margin-right: 20px;
  }

  .search {
    display: flex;
  }

  .menu-btn {
    display: none;
  }
  .intro_container {
    display: grid;
    gap: 2em;
    grid-template-rows: 40% 20% 35%;
  }
  .intro_container > div:nth-of-type(1),
  .intro_container > div:nth-of-type(2) {
    display: grid;
    align-items: center;
    margin: 0 auto;
  }

  .hint_box {
    width: 400px;
  }

  .social_link {
    margin-right: 20px;
  }

  .company_brief {
    font-weight: bolder;
    width: 400px;
  }

  .action_box {
    display: grid;
    grid-template-columns: 35% 65%;
    align-items: center;
    /* padding-top: 20px; */
  }
  .social {
    display: flex;
    justify-content: center;
  }

  .service_label {
    font-weight: bolder;
    color: #fff;
    font-size: 3em;
  }

  .service_category {
    display: flex;
    gap: 1em;
  }

  .category {
    width: 30%;
  }

  .service_type {
    font-size: 30px;
    color: aliceblue;
  }

  .service_brief {
    margin: 20px 0 40px 0;
    color: whitesmoke;
  }

  .case-box {
    width: 40%;
    padding: 150px 0;
  }

  .case {
    width: 70%;
    margin: 0 auto;
  }

  .contact-container {
    width: 70%;
  }

  form {
    grid-template-columns: 70% 30%;
  }

  .email_input {
    width: 90%;
  }

  .submit-btn {
    width: fit-content;
    padding: 8px 30px;
  }

  footer {
    grid-template-columns: 12% 12% 12% 12% 12% 30%;
    padding: 40px;
  }

  .copyright {
    font-weight: 700;
  }
}

	</style>
  </head>
  <body>
    <header>
      <div class="search">
        <input type="text" placeholder="Search" class="search_input" />
      </div>
      <div class="logo-box">
        <img src="https://bmvfo.bmvforex.com/investment/wp-content/uploads/2021/11/footer_logo-1.png" alt="" class="logo" />
        <a href="/" class="text_logo">
          CAPITAL TRADE</a>
      </div>
      <div>
        <nav class="navigations">
          <li class="navList"><a href="/">Home</a></li>
          <li class="navList"><a href="/about">About</a></li>
          <li class="navList"><a href="/contact">Contact</a></li>
        </nav>
      </div>
      <button class="menu-btn">
        <i class="fa-solid fa-2x fa-bars-staggered"></i>
      </button>
      <div id="google_translate_element"></div>

    </header>