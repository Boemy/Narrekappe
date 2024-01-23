# Create a connection to vSphere (NetLab)
Connect-VIServer -Server "192.168.104.11" -User "Administrator@infralab.lan" -Password "Obelix@99"

# Get VM information and select relevant properties
$VMInfo = Get-VM -Name "NK-*" | Select-Object Name, `
    @{Name='PowerState'; Expression={if ($_.PowerState -eq 'PoweredOn') {'PoweredOn'} else {'PoweredOff'}}}, `
    NumCpu, `
    @{Name='CpuUsageMHz'; Expression={$_.ExtensionData.Summary.QuickStats.OverallCpuUsage}}, `
    MemoryGB, `
    @{Name='MemoryUsageMB'; Expression={$_.ExtensionData.Summary.QuickStats.HostMemoryUsage}}, `
    @{Name='ProvisionedSpaceGB'; Expression={[math]::Round($_.ProvisionedSpaceGB)}}, `
    @{Name='UsedSpaceMB'; Expression={[math]::Round($_.UsedSpaceGB * 1024)}}


# Output VM information as JSON
$VMInfo | ConvertTo-Json
