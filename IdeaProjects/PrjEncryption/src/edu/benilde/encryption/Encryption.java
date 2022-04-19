package edu.benilde.encryption;

public class Encryption {
    private int mask;
    private String message;
    private int xor;
    private String encryptedMessage, decryptedMessage;

    public Encryption()
    {
        mask = 0;
        message = "";
        xor = 0;
        encryptedMessage = "";
        decryptedMessage = "";
    }

    public String getMessage()
    {
        return message;
    }

    public void setMessage(String message)
    {
        this.message = message;
    }

    public int getMask()
    {
        return mask;
    }

    public void setMask(int mask)
    {
        this.mask = mask;
    }

    public String encryption()
    {
        for (int i = 0; i < message.length(); i++)
        {
            xor = message.charAt(i) ^ mask;
            encryptedMessage += (char) xor;
        }
        return encryptedMessage;
    }

    public String decryption()
    {
        for (int i = 0; i < encryptedMessage.length(); i++)
        {
            xor = encryptedMessage.charAt(i) ^ mask;
            decryptedMessage += (char) xor;
        }
        return decryptedMessage;
    }
}
