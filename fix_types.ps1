$files = Get-ChildItem -Path "d:\ejsc-website\app\Filament\Resources" -Filter *Resource.php -Recurse
foreach ($f in $files) {
    $c = [System.IO.File]::ReadAllText($f.FullName)
    $c = $c -replace 'protected static \?string \$navigationGroup', 'protected static string|\UnitEnum|null $navigationGroup'
    $c = $c -replace 'protected static \?string \$navigationIcon', 'protected static string|\BackedEnum|null $navigationIcon'
    [System.IO.File]::WriteAllText($f.FullName, $c, (New-Object System.Text.UTF8Encoding($False)))
}
