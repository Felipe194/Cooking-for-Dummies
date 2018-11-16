import { Component, OnInit } from '@angular/core';
import{PlatosService} from '../Servicios/platos.service';
import {HttpClient} from '@angular/common/http';
import {Plato}from '../Interfaces/plato';

@Component({
  selector: 'app-platos',
  templateUrl: './platos.component.html',
  styleUrls: ['./platos.component.css']
})
export class PlatosComponent implements OnInit {
API_ENDPOINT='http://localhost:8000/api';
platos:Plato[];
  constructor(private platoService:PlatosService, private httpClient:HttpClient){
    httpClient.get(this.API_ENDPOINT+'/platos').subscribe((data:Plato[])=>{
      this.platos=data;
      console.log(data);


    })

  }

  ngOnInit() {
  }

}
