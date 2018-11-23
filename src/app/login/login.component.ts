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
  public googleUrl:any;
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

      this.googleUrl = 'https://www.google.com/accounts/AccountChooser?Email=' + this.userEmail
                       + '&continue=https%3A%2F%2Fwww.google.com%2Fintl%2Fen%2Fimages%2Flogos%2Faccounts_l'
                       + 'ogo.png&followup=https%3A%2F%2Fwww.google.com%2Fintl%2Fen%2Fimages%2Flogos%2Faccounts_logo.png';


    }
  }

  googleUrlError(event) {
    this.errorMsg = 'Abre una nueva pestaña y logeate con tu cuenta de google.';
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
