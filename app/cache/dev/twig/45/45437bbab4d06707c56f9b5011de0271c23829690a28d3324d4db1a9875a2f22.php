<?php

/* @SonataAdmin/Core/user_block.html.twig */
class __TwigTemplate_09c9aa40ce0aa8096872b74aded3047813739c2bb926665686911ca49b322b88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_115e1f1b30c3e371591aac6d9cabb786774016f15712359b7ff52acdc65f8bab = $this->env->getExtension("native_profiler");
        $__internal_115e1f1b30c3e371591aac6d9cabb786774016f15712359b7ff52acdc65f8bab->enter($__internal_115e1f1b30c3e371591aac6d9cabb786774016f15712359b7ff52acdc65f8bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_115e1f1b30c3e371591aac6d9cabb786774016f15712359b7ff52acdc65f8bab->leave($__internal_115e1f1b30c3e371591aac6d9cabb786774016f15712359b7ff52acdc65f8bab_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_284f05059a9e0ec20ba842fc2698e80ba59b222c853e3aadbde0098d31f2ebec = $this->env->getExtension("native_profiler");
        $__internal_284f05059a9e0ec20ba842fc2698e80ba59b222c853e3aadbde0098d31f2ebec->enter($__internal_284f05059a9e0ec20ba842fc2698e80ba59b222c853e3aadbde0098d31f2ebec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Logout</a>";
        
        $__internal_284f05059a9e0ec20ba842fc2698e80ba59b222c853e3aadbde0098d31f2ebec->leave($__internal_284f05059a9e0ec20ba842fc2698e80ba59b222c853e3aadbde0098d31f2ebec_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Core/user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block user_block %}<a href="{{ path('logout') }}">Logout</a>{% endblock %}*/
/* */
