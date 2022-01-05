<template>

<header id="nav">
         <img src="/storage/img/logo.png" alt="logo">
         <label for="check" id="burger" @click="Burger()">
            <span></span>
            <span></span>
            <span></span>
        </label>
        <nav>
            <ul>
                <li v-if="!$page.props.user"><a href="/register">Inscription</a></li>
                <li v-if="!$page.props.user"><a href="/login">Connexion</a></li>
                <li><a href="/annonce">Annonces</a></li>
                <li><a href="/faq">FAQ</a></li>
                <li><a href="/mentions_legal">Mentions Légal</a></li>
                <li><a href=""></a>Modifications Sportif</li>
                <li><a href=""></a>Filtres</li>
                <li><a href="">Entreprise Favorites</a></li>
                <li v-if="$page.props.user"><a href="/login" @click="logout()">Deconnexion</a></li>
            </ul>
        </nav>
</header>


</template>

<style>

/* .containeur{
    overflow-y: hidden;
} */

.open > nav{
    clip-path: inset(0 0 0 0);
}

nav {
    height: 100vh;
    width: 100%;
    position: fixed;
    right: 0;
    top: 0;
    flex-direction: column;
    background: linear-gradient(#eaf5f3,#c9d7eb);
    clip-path: inset(0 0 0 100%);
    transition: 0.3s ease;
    overflow-y: hidden;
    z-index: 500;
}



nav ul{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-top: 100px;
    gap: 20px;
}

li{
    font-weight: 600;
}

header{
    width: 100%;
    height: 63px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-left: 15px;
    padding-right: 15px;
    background-color: white;
}


#burger{
 display:flex;
  flex-direction:column;
  width:70px;
  cursor:pointer;
  transform: scale(0.4);
  z-index: 600;
}

#burger span{
  background: rgb(0, 0, 0);
  border-radius:10px;
  height:7px;
  margin: 7px 0;
  transition: .4s  cubic-bezier(0.68, -0.6, 0.32, 1.6);

}


span:nth-of-type(1){
  width:50%;

}

span:nth-of-type(2){
  width:100%;
}


span:nth-of-type(3){
  width:75%;

}



.open span:nth-of-type(1){
  transform-origin:bottom;
  transform:rotatez(45deg) translate(8px,0px)
}


.open span:nth-of-type(2){

  transform-origin:top;
  transform:rotatez(-45deg)
}


.open span:nth-of-type(3){

  transform-origin:bottom;
  width:50%;
  transform: translate(30px,-11px) rotatez(45deg);

}
</style>


<script>
    export default{
        data() {
            return{
                menu : 0,

            }
        },
        methods: {
            Burger(){
            var nav = document.getElementById('nav')
            // var nav = document.getElementById('containeur')
            console.log(nav)

            nav.classList.toggle('open')

            },
            logout(){
                this.$inertia.post(route('logout'))
            }
        }
    }
</script>



