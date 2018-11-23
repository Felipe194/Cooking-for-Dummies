import { Component, OnInit } from '@angular/core';
import {AuthService} from '../services/auth.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {

  public userName:string;
  public instagramUrl:any;
  public errorMsg:string;
  public responseData: any;
  public userPostData={
    'email':'';
  }

  constructor() { }

  ngOnInit() {
    this.errorMsg = "";
    this.googleUrl = "";

  }

  emailValidate(){
    if(this.userEmail){
      this.userPostData.email=this.userEmail;
      console.log(this.userPostData.email);

      this.instagramUrl = 'https://www.instagram.com/


    }
  }

  googleUrlError(event) {
    this.errorMsg = 'Logueate con tu cuenta de Instagram.';
  }

  googleUrlSuccess(event) {
      if (this.userPostData.email) {

        this.errorMsg = '';
        this
          .authService
          .postData(this.userPostData, 'email')
          .then((result) => {
            this.responseData = result;
            if (this.responseData.userData) {
              localStorage.setItem('userData', JSON.stringify(this.responseData));
              this.router.navigate(['home']);
            }
          }, (err) => {
            //Connection failed message
          });
      }
    }




}