package edu.benilde.encryption;

public class EncryptionTestDrive
{
    public static void main(String[] args)
    {
        Encryption nEnc = new Encryption();

        nEnc.setMessage("This is a top secret message.");
        System.out.println("Actual Message: " + nEnc.getMessage());
        nEnc.setMask(70);
        System.out.println("Encrypted Message: " + nEnc.getMessage());
        System.out.println("Decrypted Message: " + nEnc.getMessage());
    }
}
