// Clase para gestionar la autenticación de usuarios
class UserAuthentication {
    authenticate(username, password) {
        // Lógica para autenticar al usuario
        return true; // Suponiendo que la autenticación es exitosa
    }
    
    // Otras funciones relacionadas con la autenticación de usuarios
}

// Clase para enviar correos electrónicos
class EmailSender {
    sendEmail(to, subject, message) {
        // Lógica para enviar el correo electrónico
        console.log(`Correo electrónico enviado a: ${to}`);
        console.log(`Asunto: ${subject}`);
        console.log(`Mensaje: ${message}`);
    }
    
    // Otras funciones relacionadas con el envío de correos electrónicos
}

// Uso de las clases separadas
const userAuth = new UserAuthentication();
const isAuthenticated = userAuth.authenticate("usuario", "contraseña");

const emailSender = new EmailSender();
emailSender.sendEmail('usuario@example.com', 'Nuevo mensaje', '¡Hola! Has recibido un nuevo mensaje.');

