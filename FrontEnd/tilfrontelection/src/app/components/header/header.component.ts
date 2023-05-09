
export interface Region{
  id:number;
  label:string;
}
import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.css']
})
export class HeaderComponent implements OnInit {

  constructor(){

  }
  ngOnInit(): void {

  }
  i:number=5;
 regions: Region[] = [
    {"id":1, "label": "Nord"},
    {"id":2, "label": "Sud"},
    {"id":3, "label": "Est"},
    {"id":4, "label": "Centre"},
    {"id":5, "label": "Ouest"},
  ];

  ecouteurEnfant(event:number){
    this.regions[this.i] = {"id":this.i, "label":"Region"+this.i};
    this.i++;
  }

}
