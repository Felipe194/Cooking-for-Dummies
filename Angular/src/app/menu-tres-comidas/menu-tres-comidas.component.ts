import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-menu-tres-comidas',
  templateUrl: './menu-tres-comidas.component.html',
  styleUrls: ['./menu-tres-comidas.component.scss']
})
export class MenuTresComidasComponent implements OnInit {
  logros : ILogro[];
  titulo  : string = 'Bienvenidos';
  constructor() { }

  ngOnInit() {
    this.logros = this.getLogros();
  }

  }


