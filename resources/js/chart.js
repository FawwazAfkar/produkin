// Monthly Production Chart
const monthlyProductionCtx = document.getElementById('monthlyProductionChart').getContext('2d');
const monthlyProductionChart = new Chart(monthlyProductionCtx, {
    type: 'bar',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        datasets: [{
            label: 'Jumlah Produksi',
            data: [120, 100, 90, 110, 70, 80, 30, 20, 40, 70, 90, 100], // Update with actual data
            backgroundColor: 'rgba(200, 200, 200, 0.8)',
            borderWidth: 0 // No border for cleaner look
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                display: false
            },
            title: {
                display: true,
                text: 'Tren Produksi Bulanan',
                font: {
                    size: 16,
                    weight: 'bold'
                },
                color: '#333'
            }
        },
        scales: {
            y: {
                beginAtZero: true,
                grid: {
                    color: 'rgba(0, 0, 0, 0.1)'
                }
            },
            x: {
                grid: {
                    display: false
                }
            }
        }
    }
});

// Main Material Usage Chart
const mainMaterialUsageCtx = document.getElementById('mainMaterialUsageChart').getContext('2d');
const mainMaterialUsageChart = new Chart(mainMaterialUsageCtx, {
    type: 'bar',
    data: {
        labels: ['Kayu', 'Besi', 'Kain', 'Plastik', 'Cat'],
        datasets: [{
            label: 'Jumlah Penggunaan',
            data: [100, 110, 90, 80, 60], // Update with actual data
            backgroundColor: 'rgba(200, 200, 200, 0.8)',
            borderWidth: 0
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                display: false
            },
            title: {
                display: true,
                text: 'Penggunaan Bahan Baku Utama',
                font: {
                    size: 16,
                    weight: 'bold'
                },
                color: '#333'
            }
        },
        scales: {
            y: {
                beginAtZero: true,
                grid: {
                    color: 'rgba(0, 0, 0, 0.1)'
                }
            },
            x: {
                grid: {
                    display: false
                }
            }
        }
    }
});

// Order Status Distribution Chart
const orderStatusDistributionCtx = document.getElementById('orderStatusDistributionChart').getContext('2d');
const orderStatusDistributionChart = new Chart(orderStatusDistributionCtx, {
    type: 'pie',
    data: {
        labels: ['Selesai', 'Dalam Proses', 'Dikirim'],
        datasets: [{
            label: 'Distribusi Status Pesanan',
            data: [45, 35, 20], // Update with actual data
            backgroundColor: [
                'rgba(150, 150, 150, 0.8)',
                'rgba(200, 200, 200, 0.8)',
                'rgba(220, 220, 220, 0.8)'
            ],
            borderWidth: 0
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'right',
                labels: {
                    color: '#333',
                    font: {
                        size: 12
                    }
                }
            },
            title: {
                display: true,
                text: 'Distribusi Status Pesanan',
                font: {
                    size: 16,
                    weight: 'bold'
                },
                color: '#333'
            }
        }
    }
});
