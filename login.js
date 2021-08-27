// Initialize Cloud Firestore through Firebase
firebase.initializeApp({
 apiKey: "AIzaSyAVqefn9GhMozAiJDXBo6sKB7biqnEOFgQ",
    authDomain: "true-4f57f.firebaseapp.com",
  projectId: "true-4f57f",

});


 function registrofacebook(){
 firebase.auth().signInWithPopup(provider).then(function(result) {
  // This gives you a Facebook Access Token. You can use it to access the Facebook API.
  var token = result.credential.accessToken;
  // The signed-in user info.
  var user = result.user;
  
  console.log(token);
  // ...
}).catch(function(error) {
  // Handle Errors here.
  
 
  var errorCode = error.code;
  var errorMessage = error.message;
  // The email of the user's account used.
  var email = error.email;
  // The firebase.auth.AuthCredential type that was used.
  var credential = error.credential;
  // ...
   console.log(errorCode);
    console.log(errorMessage);
    
});
   
 }    





function registro(){

        var db = firebase.firestore();
        
        var name = document.getElementById('name').value;
        var lastname = document.getElementById('lastname').value;
        var mail = document.getElementById('mail').value;
        var password = document.getElementById('password').value;
        var date = document.getElementById('date').value;


                        firebase.auth().createUserWithEmailAndPassword(mail, password).catch(function(error) {
                          // Handle Errors here.
                          var errorCode = error.code;
                          var errorMessage = error.message;
                          console.log(errorCode);
                          console.log(errorMessage);
                          // ...
                        });

                        var user = firebase.auth().currentUser;


                        user.updateProfile({
                          displayName: name,
                          photoURL: "https://example.com/jane-q-user/profile.jpg",
                          lastname: lastname,
                          date: date
                        }).then(function() {
                         console.log("el nombre de usuario: "+user.displayName);
                        }).catch(function(error) {
                          // An error happened.
                        });

}




