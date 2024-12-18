<div>
    Dashboard
    <livewire:dashboard />
</div>
<script>
    Livewire.on('someEvent', () => {
        console.log(@this); // Log the component's data
    });
</script>