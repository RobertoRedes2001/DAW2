import { TestBed } from '@angular/core/testing';

import { BallinService } from './ballin.service';

describe('BallinService', () => {
  let service: BallinService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(BallinService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
