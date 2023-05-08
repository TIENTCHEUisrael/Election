export interface Region{
  id: number;
  label: string;
}


import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.css']
})
export class HeaderComponent implements OnInit {

  i:number = 5;
  constructor() { }

  ngOnInit(): void {
  }

  regions: Region[] = [
    {"id": 1, "label": "Nord"},
    {"id": 2, "label": "Sud"},
    {"id": 1, "label": "Est"},
    {"id": 1, "label": "Ouest"},
    {"id": 1, "label": "Centre"}
  ]

  ecouterEnfant(event: number){
    this.regions[this.i] = {"id": this.i, "label": "Region"+this.i};
    this.i++;
  }

}
