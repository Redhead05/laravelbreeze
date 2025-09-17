# Laravel Breeze Three-Role Structure

This Laravel Breeze application has been structured to accommodate three distinct roles: **Admin**, **Asesor**, and **Lembaga**.

## Controller Structure

### Admin Role
- **Path**: `app/Http/Controllers/Admin/`
- **Controllers**:
  - `DashboardController.php` - Admin dashboard
  - `User/UserController.php` - User management
  - `Attendance/AttendanceController.php` - Attendance management

### Asesor Role
- **Path**: `app/Http/Controllers/Asesor/`
- **Controllers**:
  - `DashboardController.php` - Asesor dashboard
  - `Assessment/AssessmentController.php` - Assessment management

### Lembaga Role
- **Path**: `app/Http/Controllers/Lembaga/`
- **Controllers**:
  - `DashboardController.php` - Lembaga dashboard
  - `Institution/InstitutionController.php` - Institution management

## View Structure

### Shared Layout
- **Path**: `resources/views/layouts/shared-app.blade.php`
- **Description**: A modular and reusable layout that is shared across all three roles
- **Features**: 
  - Responsive design
  - Role-agnostic styling
  - Includes sidebar, header, footer, and theme settings
  - Uses existing partial components

### Role-Specific Views

#### Admin Views
- **Path**: `resources/views/Admin/`
- **Dashboard**: `dashboard/index.blade.php` - Comprehensive admin dashboard with course management
- **Users**: `user/` directory with CRUD views
- **Attendance**: `attendance/` directory with management views

#### Asesor Views  
- **Path**: `resources/views/Asesor/`
- **Dashboard**: `dashboard.blade.php` - Assessment-focused dashboard

#### Lembaga Views
- **Path**: `resources/views/lembaga/`
- **Dashboard**: `dashboard/index.blade.php` - Institution management dashboard

## Routing Structure

### Route Groups
All routes are properly grouped by role with middleware protection:

```php
// Admin routes
Route::middleware(['auth', 'role:admin'])->group(function(){
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('/admin/user', UserController::class);
    Route::resource('/admin/attendance', AttendanceController::class);
});

// Lembaga routes
Route::middleware(['auth', 'role:lembaga'])->group(function(){
    Route::get('/lembaga/dashboard', [LembagaDashboardController::class, 'index'])->name('lembaga.dashboard');
    Route::resource('/lembaga/institution', InstitutionController::class);
});

// Asesor routes
Route::middleware(['auth', 'role:asesor'])->group(function(){
    Route::get('/asesor/dashboard', [AsesorDashboardController::class, 'index'])->name('asesor.dashboard');
    Route::resource('/asesor/assessment', AssessmentController::class);
});
```

## Key Features

1. **Role-Based Access Control**: Each role has its own middleware-protected route group
2. **Modular Layout**: Shared layout system for consistent UI across roles
3. **Resource Controllers**: Full CRUD capabilities for each role's primary resources
4. **Responsive Design**: All dashboards are mobile-friendly and use Bootstrap components
5. **Extensible Structure**: Easy to add new controllers and views for each role

## Usage

Each role will have access to:
- A personalized dashboard with role-specific metrics
- CRUD operations for their primary resource type
- Shared UI components (sidebar, header, footer)
- Profile management functionality

The structure supports easy expansion of functionality for each role while maintaining separation of concerns.