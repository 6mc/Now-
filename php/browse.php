<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Browse Profiles</title>
  <link href="https://fonts.googleapis.com/css?family=Karla|Yeseva+One" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css'>

      <link rel="stylesheet" href="ass/style.css">

  
</head>

<body>

 <a :href="selectedPersonData.social.facebook" target="_blank" class="ion-md-arrow"></a>

<a href="feed.php" style="background-color: white; text-decoration: none;color: black;padding: 3%; margin-top: 22%; border-radius: 4px; margin-left:2%; ">Go Back</a>


  <div :class="['container', isSelected ? 'container-selected':'', isReady ? 'container-ready':'']" id="app">
  <div class="team-container">
    <div class="header">
      <h2 class="header-title">Browse Profiles</h2>


    </div>


    <div class="person-list">
      <div class="person" v-for="(person,index) in persons" @click="selectPerson(index,$event)"><img class="person-img" :src="person.photo">
        <div class="person-details">
          <a style="color: white; font-size: 144%;" href="selectedPersonData.social.linkedin" target="_blank" class="ion-circle"></a>
          <a  style="text-decoration: none;" :href="person.url" class="person-title">{{person.name}}</a>
           



        </div>
      </div>
    </div>
  </div>
  <div class="team-detail">
    <div class="team-detail-inner" v-if="isOk">
      <div class="team-detail-left" :style=`background-image:url(${selectedPersonData.photo})`>
        <div class="team-detail-photo"><img :src="selectedPersonData.photo" alt="">
        </div>
      </div>
      <div class="team-detail-right">
        <div class="team-detail-bio">
          <div class="team-detail-header">
            <a :href="selectedPersonData.url" class="person-title">{{selectedPersonData.name}}</a>
            <a :href="selectedPersonData.url" class="person-desc">{{selectedPersonData.title}}</a>
            <div class="social">
              <a :href="selectedPersonData.social.facebook" target="_blank" class="ion-social-facebook"></a>
              <a :href="selectedPersonData.social.twitter" target="_blank" class="ion-social-twitter"></a>
              <a href="selectedPersonData.social.linkedin" target="_blank" class="ion-person-add"></a>
            </div>
          </div>
          <div class="team-detail-bio-content" v-html="selectedPersonData.bio">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.4/vue.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.2.1/vue-resource.min.js'></script>


  
 <script  >
 
   

const persons = [

<?php 
require(__DIR__.'/ayar.php');
z(6,'users');

$server = z(1,"WHERE 1",'name');
$gazi = z(1,"WHERE 1",'pic');
$kimlikler = z(1,"WHERE 1",'id');
  
for ($i=0; $i <count($server) ; $i++) { 
  # code...

echo '{';
echo 'name: "'. $server[$i].'",';
echo 'photo: "images/'. $gazi[$i].'",';
echo 'title:"USER", ';
echo 'url:"now.php?id='.$kimlikler[$i].'",';
echo 'bio:';
echo '"<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet architecto ea blanditiis quo labore esse magnam illum ut quibusdam. Corrupti ratione iure aliquam adipisci! Harum vitae laboriosam temporibus illo suscipit?</p><p>Saepe repudiandae rerum quam ut perferendis, ullam similique nemo quod, assumenda mollitia consectetur. Eveniet optio maxime perferendis odit possimus? Facilis architecto nesciunt doloribus consectetur culpa veritatis accusamus expedita quos voluptate!</p><p>Nisi provident minus possimus optio voluptate rem, perspiciatis, placeat, culpa aperiam quod temporibus.</p>",';
echo 'social: {';
echo 'facebook: "#",';
echo 'twitter: "https://twitter.com/knyttneve",';
echo 'linkedin: "#"';
echo '}';
echo '},';


}




?>

 {
    name: "Carl Roland",
    photo: "https://serving.photos.photobox.com/2226093445b640ea69b3247d4e4a31ee16d7569a38f898affce33adc8fc8d0f3ecf79591.jpg",
    title: "UI/UX Designer",
    bio:
      "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet architecto ea blanditiis quo labore esse magnam illum ut quibusdam. Corrupti ratione iure aliquam adipisci! Harum vitae laboriosam temporibus illo suscipit?</p><p>Saepe repudiandae rerum quam ut perferendis, ullam similique nemo quod, assumenda mollitia consectetur. Eveniet optio maxime perferendis odit possimus? Facilis architecto nesciunt doloribus consectetur culpa veritatis accusamus expedita quos voluptate!</p><p>Nisi provident minus possimus optio voluptate rem, perspiciatis, placeat, culpa aperiam quod temporibus.</p>",
    social: {
      facebook: "#",
      twitter: "https://twitter.com/knyttneve",
      linkedin: "#"
    }
  },

 
];

const app = new Vue({
  el: "#app",
  data() {
    return {
      persons: persons,
      selectedPersonIndex: null,
      isSelected: false,
      selectedPerson: null,
      inlineStyles: null,
      isReady: false,
      isOk: false,
      selectedPersonData: {
        name: null,
        title: null,
        photo: null,
        social: {
          facebook: null,
          twitter: null,
          linkedin: null
        }
      }
    };
  },
  methods: {
    selectPerson(index, el) {
      if (!this.isOk) {
        this.selectedPersonIndex = index;
        this.isSelected = true;
        el.target.parentElement.className == "person-details"
          ? (this.selectedPerson = el.target.parentElement.parentElement)
          : (this.selectedPerson = el.target.parentElement);

        this.selectedPerson.classList.add("person-selected");
        this.selectedPerson.setAttribute(
          "style",
          `width:${this.selectedPerson.offsetWidth}px;`
        );
        this.selectedPersonData = this.persons[index];
        window.setTimeout(() => {
          this.inlineStyles = `width:${this.selectedPerson
            .offsetWidth}px;height:${this.selectedPerson
            .offsetHeight}px;left:${this.selectedPerson.offsetLeft}px;top:${this
            .selectedPerson.offsetTop}px;position:fixed`;
          this.selectedPerson.setAttribute("style", this.inlineStyles);
        }, 400);
        window.setTimeout(() => {
          this.isReady = true;
          this.isOk = true;
        }, 420);
      } else {
        this.reset();
      }
    },
    reset() {
      this.isReady = false;
      window.setTimeout(() => {
        this.selectedPerson.classList.add("person-back");
      }, 280);
      window.setTimeout(() => {
        this.selectedPerson.setAttribute("style", "");
      }, 340);
      window.setTimeout(() => {
        this.isSelected = false;
        this.selectedPerson.classList.remove("person-back", "person-selected");
        this.isOk = false;
      }, 400);
    }
  }
});
  </script>
    




</body>

</html>
