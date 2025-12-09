# Portfolio 
Hello everyone!  
Let me introduce myself, I’m Jonathan Nathannael Zefanya. On this occasion, I’d like to share the portfolio website project that I’ve developed.  

**Tech Stack used:**  
- ReactJS  
- Tailwind CSS  
- AOS  
- Firebase  
- Framer Motion  
- Lucide  
- Material UI  
- SweetAlert2  
- PHP (BE)


We would appreciate it if you decide to use this project. Please include credit when using it. Thank you! 🙏  

---

# Tutorial: Running the Project  

Here’s a simple guide to run this project.  

## Prerequisites  

Ensure that you have already installed:  
- **Node.js**  

---

## Steps to Run the Project  

1. **Download this project:**  

   ```bash  
   git clone https://github.com/Jonathan-Zefanya/Portofolio.git  
   ```  

2. **Install all dependencies:**  

   ```bash  
   npm install  
   ```  
   Or use:  

   ```bash  
   npm install --legacy-peer-deps  
   ```  

3. **Run the project:**  

   ```bash  
   npm run dev  
   ```  

4. **Open in browser:**  

   Access the application through the link displayed in your terminal.  

---

## Creating a Production Build  

To create a production-ready build:  

1. Run the build command:  

   ```bash  
   npm run build  
   ```  

2. The build files will be saved in the `dist` folder. You can upload this folder to your hosting server.  

---

## Notes  

If you encounter issues while running the project, ensure that:  
- Node.js is correctly installed.  
- You’re in the correct project directory.  
- All dependencies are installed without errors.  

---

## Firebase Configuration  

To configure Firebase for this project, follow these steps:  

1. **Add Firebase to the Project:**  
   - Go to the [Firebase Console](https://console.firebase.google.com/).  
   - Create a new project or use an existing one.  

2. **Enable Firestore Database:**  
   - Create a database.  

3. **Go to Project Settings:**  
   - Click the settings icon.  
   - Copy the Firebase configuration.  

4. **Go to Rules:**  
   - Set the rules to `true`.  

5. **Adjust the Collection Structure:**  
   - Set up the collections as shown in the following images:  

   ![Collection Structure Example 1](https://github.com/user-attachments/assets/38580122-08a4-4499-a8fd-0f253652a239)  
   ![Collection Structure Example 2](https://github.com/user-attachments/assets/d563d7ad-f1ab-46ff-8185-640dcebd0363)  

6. **Update `firebase.js` and `firebase-comment.js` Files:**  
   - Replace the `firebaseConfig` content with your Firebase configuration.  

   ---

   **Re-clone After History Rewrite**

   - **Why:** The repository history was rewritten to remove sensitive data. To avoid merge conflicts and broken history, re-cloning is the safest option.
   - **Recommended (safe) — PowerShell:**

   ```
   # move to parent folder (adjust path as needed)
   cd C:\path\to\parent\folder

   # (optional) back up your current repo folder
   mv .\Portfolio .\Portfolio-backup

   # clone fresh copy
   git clone https://github.com/jonathan-zefanya/Portfolio.git
   cd Portfolio
   ```

   - **If you have uncommitted local changes you want to keep:**

   ```
   cd C:\path\to\existing\Portfolio
   # save a patch of your current staged changes
   git add -A
   git diff --staged > ..\my-changes.patch

   # (optional) commit to a temporary branch and push it to remote for safekeeping
   git checkout -b my-local-work
   git commit -m "WIP: save local work before re-clone" || echo "No changes to commit"
   git push origin my-local-work || echo "Push failed; branch saved locally"
   ```

   After creating the patch or pushing the temporary branch, perform the recommended re-clone above and then apply the patch if needed:

   ```
   # after re-clone
   git apply ..\my-changes.patch
   ```

   - **Alternate (advanced, risky): reset to remote history**

   ```
   cd C:\path\to\existing\Portfolio
   git fetch origin
   # WARNING: This will overwrite local changes
   git reset --hard origin/main
   ```

   - **Security actions (required):**
      - Rotate/revoke any exposed Firebase API keys in the Google Cloud Console immediately.
      - Verify any other credentials that may have been leaked.

   - **Need help?** If you want, I can:
      - Create a PowerShell script that automates backup + re-clone + patch application.
      - Provide exact commands to recover local commits and rebase them onto the new history.


