<template>
<div>
<h2>Welcome to the WebRTC Room</h2>
<webrtc :options="webRTCOptions"></webrtc>
</div>
</template><script>
import VueWebRTC from 'vue-webrtc';export default {
name: 'Room',
components: {
'webrtc': VueWebRTC,
},
data() {
return {
webRTCOptions: {
localVideo: 'local-video',
remoteVideos: 'remote-videos',
mediaConstraints: {
audio: true,
video: true,
},
},
};
},
};
</script>

<style scoped>
/* Add your styles here */
</style>
