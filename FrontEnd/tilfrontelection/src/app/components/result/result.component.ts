import { Component, OnInit } from '@angular/core';
import { FormBuilder } from '@angular/forms';
import { Resultat } from '../../models/Vote.models';
import { RegionService } from '../../services/region.service';

@Component({
  selector: 'app-result',
  templateUrl: './result.component.html',
  styleUrls: ['./result.component.scss']
})
export class ResultComponent {
  VoteData!: Resultat[];
  votemodel: Resultat = new Resultat();

  constructor(private formbuilder:FormBuilder ,private api:RegionService) { }

  ngOnInit(): void {
    /*this.api.loadResultat().subscribe(
      data =>{
        this.VoteData = data.VoteData;
      }
    )*/
  }

  getresultat(){
      this.api.loadResultat().subscribe(res =>{
        this.VoteData = res
      })
  }

}
