$files = Get-ChildItem -Path ".\" -Include "*.html", "*.php" -File -Recurse | Where-Object { $_.Name -ne "index.php" }
$btnStr = "`n  <button id=""scrollTopBtn"">`n    <span class=""arrow""></span>`n    <svg class=""progress-ring"" width=""60"" height=""60"">`n      <circle cx=""30"" cy=""30"" r=""26"" stroke-width=""4"" />`n    </svg>`n  </button>`n</body>"
$count = 0

foreach ($f in $files) {
    if ((Get-Content -Raw $f.FullName) -match "bot-link-bar") {
        $content = Get-Content -Raw $f.FullName
        if ($content -notmatch 'id="scrollTopBtn"') {
            $content = $content -replace '</body>', $btnStr
            Set-Content -Path $f.FullName -Value $content
            Write-Host "Injected into $($f.Name)"
            $count++
        }
    }
}
Write-Host "Total files injected: $count"
