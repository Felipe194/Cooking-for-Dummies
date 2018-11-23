import { Component } from '@angular/core';
//import {OnInit} from '@angular/core';
/*import {
    AuthService,
    FacebookLoginProvider,
    GoogleLoginProvider
} from 'angular4-social-login';*/


@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {//implements OnInit
  title = 'app';

  //private user: SocialUser;
/*  private loggedIn: boolean;

  constructor(private authService: AuthService) { }

  ngOnInit() {
    this.authService.authState.subscribe((user) => {
    //  this.user = user;
      this.loggedIn = (user != null);
    });
  }*/

}
