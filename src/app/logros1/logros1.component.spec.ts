import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { Logros1Component } from './logros1.component';

describe('Logros1Component', () => {
  let component: Logros1Component;
  let fixture: ComponentFixture<Logros1Component>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ Logros1Component ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(Logros1Component);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
