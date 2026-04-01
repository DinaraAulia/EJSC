$updates = @{
    "Achievements\AchievementResource.php" = @("heroicon-o-trophy", "Content Management", "Achievement", "Achievements")
    "Agendas\AgendaResource.php" = @("heroicon-o-calendar-days", "Content Management", "Event & Agenda", "Events & Agendas")
    "Fasilitas\FasilitasResource.php" = @("heroicon-o-squares-plus", "Space & Facilities", "Facility", "Facilities")
    "Galeris\GaleriResource.php" = @("heroicon-o-photo", "Content Management", "Gallery Album", "Gallery Albums")
    "GaleriFotos\GaleriFotoResource.php" = @("heroicon-o-camera", "Content Management", "Gallery Photo", "Gallery Photos")
    "Partners\PartnerResource.php" = @("heroicon-o-handshake", "User & Network", "Collaboration Partner", "Collaboration Partners")
    "Peminjamen\PeminjamanResource.php" = @("heroicon-o-clipboard-document-check", "Space & Facilities", "Room Booking", "Room Bookings")
    "Pengunjungs\PengunjungResource.php" = @("heroicon-o-user-group", "User & Network", "Workspace Visitor", "Workspace Visitors")
    "Ruangans\RuanganResource.php" = @("heroicon-o-building-office", "Space & Facilities", "Workspace Room", "Workspace Rooms")
    "Talentas\TalentaResource.php" = @("heroicon-o-academic-cap", "User & Network", "Local Talent", "Local Talents")
    "Testimonis\TestimoniResource.php" = @("heroicon-o-chat-bubble-left-right", "Content Management", "Review & Feedback", "Reviews & Feedback")
    "Umkms\UmkmResource.php" = @("heroicon-o-building-storefront", "User & Network", "Partner SME", "Partner SMEs")
}

foreach ($key in $updates.Keys) {
    $file = "d:\ejsc-website\app\Filament\Resources\$key"
    if (Test-Path $file) {
        $content = Get-Content $file -Raw
        
        $pattern = '(?m)^[ \t]*protected\s+static\s+(string\|BackedEnum\|null|\?string)\s+\$navigationIcon\s*=\s*[^;]+;'
        
        $icon = $updates[$key][0]
        $group = $updates[$key][1]
        $single = $updates[$key][2]
        $plural = $updates[$key][3]
        
        $replacement = "protected static ?string `$navigationIcon = '$icon';`n    protected static ?string `$navigationGroup = '$group';`n    protected static ?string `$modelLabel = '$single';`n    protected static ?string `$pluralModelLabel = '$plural';"
        
        $newContent = $content -replace $pattern, $replacement
        Set-Content -Path $file -Value $newContent -Encoding UTF8
    }
}
