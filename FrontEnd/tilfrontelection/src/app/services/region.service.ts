import { Injectable } from '@angular/core';
import { HttpClient, HttpClientModule } from '@angular/common/http';
import { Region } from '../models/region.model';
import { Observable, catchError, of } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class RegionService {

  CREATE_REGION = "http://localhost:8000/api/region";

  save(region: any):Observable<Region>{
    const req  = this.client.post<Region>(`http://localhost:8000/api/region`, region);
    req.pipe(data => {console.log(data); return data}, catchError((error:Error) => of(error) ));
    return req;
  }
  constructor(public client: HttpClient) { 
    
  }
}



