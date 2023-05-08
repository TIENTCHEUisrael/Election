import { Injectable } from '@angular/core';
import { Region } from '../models/region.model';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { catchError, Observable, of, tap } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class RegionService {

  constructor(public http: HttpClient) { }
  API_REGION: string = "http://localhost:8000/api/region";

  createRegion(region: Region): Observable<Region> {
   
    const httpOptions = {
      headers: new HttpHeaders({'Content-type': 'application/json'})
    };

    console.log(region);
    return this.http.post<Region>(this.API_REGION, region, httpOptions).pipe(
      tap((res) => console.log(res)),
      catchError((error) => {
        console.error(error);
        return of(error);
      })
    )
  }

  getRegions(): Observable<Region[]> {
    return this.http.get<Region[]>(this.API_REGION).pipe(
      tap((res) => console.log(res)),
      catchError((error: Error) => {
        console.error(error);
        return of();
      })
    )
  }

  updateRegion(region: Region): Observable<any> {
    const httpOptions = {
      headers: new HttpHeaders({'Content-type': 'application/json'})
    };

    return this.http.put(this.API_REGION+"/"+region.id, region, httpOptions).pipe(
      tap((response) => console.log(response)),
      catchError((error) => {
        console.error(error);
        return of(error);
      })
    );
  }

  deleteRegion(region: Region): Observable<any> {
    return this.http.delete(this.API_REGION+"/"+region.id).pipe(
      tap((res) => console.log(res)),
      catchError((error) => {
        console.error(error);
        return of(error);
      })
    )
  }
}
