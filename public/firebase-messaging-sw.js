importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-messaging.js');

firebase.initializeApp({
    apiKey: "AIzaSyDBM_AEfo15IfF87Ew42rVrirwTAtHnxiY",
    authDomain: "blooddonation-867dd.firebaseapp.com",
    projectId: "blooddonation-867dd",
    storageBucket: "blooddonation-867dd.appspot.com",
    messagingSenderId: "819040894982",
    appId: "1:819040894982:web:df06897e9760f7b5620387",
  
});

const messaging = firebase.messaging();
messaging.setBackgroundMessageHandler(function({data:{title,body,icon}}) {
    return self.registration.showNotification(title,{body,icon});
});
