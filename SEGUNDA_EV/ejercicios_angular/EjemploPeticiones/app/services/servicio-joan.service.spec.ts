import { TestBed } from '@angular/core/testing';

import { ServicioJoanService } from './servicio-joan.service';

describe('ServicioJoanService', () => {
  let service: ServicioJoanService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(ServicioJoanService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
