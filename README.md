# Bisnu Dashboard 

### Requirement
- Laravel: **Laravel 9**
- PHP: **php 8**


### Packages
- laravel/breeze
- livewire/livewire
- jantinnerezo/livewire-alert
- wire-elements/modal



## Livewire
---
### To enable Livewire add the following in your layout file: 
```html
<html>
    <head>
    ...
        @livewireStyles
    </head>
    <body>
    ...
 
        @livewireScripts
    </body>
</html>
```
>[Laravel-Livewire Official Documentation](https://laravel-livewire.com/docs/2.x/quickstart)



## Livewire Alert 
---
### add the scripts component to your template after the @livewireScripts
```html
<body>

  @livewireScripts

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
  <x-livewire-alert::scripts />
  
</body> 

```
>[Livewire-Alert Official Documentation](https://github.com/jantinnerezo/livewire-alert/blob/master/README.md)



## Livewire Modal
---
### Add the Livewire directive @livewire('livewire-ui-modal') directive to your template.
```html
<html>
    <body>
        <!-- content -->

        @livewire('livewire-ui-modal')
    </body>
</html>
```
>[Livewire-Modal Official Documentation.](https://github.com/wire-elements/modal/blob/main/README.md)



  