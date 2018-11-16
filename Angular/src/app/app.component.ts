import { Component, OnInit, ViewChild, Input} from '@angular/core';
import { LoginComponent } from '../app/login/login.component';



@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})

export class AppComponent {
  title = 'Cooking For Dummies';
 body = LoginComponent;
}
