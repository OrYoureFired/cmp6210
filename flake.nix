{
  description = "CMP6210 Cloud Computing Development Environment";

  inputs = {
    nixpkgs.url = "github:nixos/nixpkgs/nixos-unstable";
  };

  outputs = { self, nixpkgs }: 
  let
    system = "x86_64-linux";
    pkgs = import nixpkgs {
      inherit system;
      config = {
        allowUnfree = true;
      };
    };
  in {
    devShells.x86_64-linux.default = pkgs.mkShell {
      nativeBuildInputs = with pkgs; [
        # Packages used to help develop these configurations
        ansible
      ];

      shellHook = ''
        EDITOR=vim
        PS1='\e[33;1m\u@\h - CMP6210: \e[34m\W\e[0m\$ '
      ''; 
    };
  };
}