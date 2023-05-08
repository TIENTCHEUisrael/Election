import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { Region } from 'src/app/models/region.model';
import { RegionService } from 'src/app/services/region.service';

@Component({
  selector: 'app-region-create',
  templateUrl: './region-create.component.html',
  styleUrls: ['./region-create.component.scss']
})
export class RegionCreateComponent implements OnInit {
   success?: string; 
   error?: string ; 
  constructor(public formBuilder:  FormBuilder, private service:RegionService) { }
  public formR: FormGroup;
  ngOnInit(): void {

    this.formR = this.formBuilder.group({
      "nom": ["", Validators.required],
      "description": ["", Validators.required],
    })
  }

  onRegisterRegion(){
    
    const res = this.service.save(this.formR.value).subscribe();
    console.log(this.formR.value)
    
    if(res != null){
      console.log('try to save')
      this.success = "Enregistrement reussis";
    }

    else{
      console.log('can not save')
      this.error = "Echec d'enregistrement";
    }
    console.log('test')
  }
}
