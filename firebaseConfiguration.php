// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyDBM_AEfo15IfF87Ew42rVrirwTAtHnxiY",
  authDomain: "blooddonation-867dd.firebaseapp.com",
  projectId: "blooddonation-867dd",
  storageBucket: "blooddonation-867dd.appspot.com",
  messagingSenderId: "819040894982",
  appId: "1:819040894982:web:df06897e9760f7b5620387",
  measurementId: "G-LYPYFVMY0G"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);