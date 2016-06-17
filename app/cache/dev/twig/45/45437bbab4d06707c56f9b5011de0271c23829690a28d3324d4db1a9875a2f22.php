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
        $__internal_3e099710147085b4e197fdbcafd396db840824ed98f4195d01e237651bdf9bab = $this->env->getExtension("native_profiler");
        $__internal_3e099710147085b4e197fdbcafd396db840824ed98f4195d01e237651bdf9bab->enter($__internal_3e099710147085b4e197fdbcafd396db840824ed98f4195d01e237651bdf9bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_3e099710147085b4e197fdbcafd396db840824ed98f4195d01e237651bdf9bab->leave($__internal_3e099710147085b4e197fdbcafd396db840824ed98f4195d01e237651bdf9bab_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_5136786806b713361a79c59191a7d47c6d6895ca492a0011e5ce610ac4e7ded5 = $this->env->getExtension("native_profiler");
        $__internal_5136786806b713361a79c59191a7d47c6d6895ca492a0011e5ce610ac4e7ded5->enter($__internal_5136786806b713361a79c59191a7d47c6d6895ca492a0011e5ce610ac4e7ded5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_5136786806b713361a79c59191a7d47c6d6895ca492a0011e5ce610ac4e7ded5->leave($__internal_5136786806b713361a79c59191a7d47c6d6895ca492a0011e5ce610ac4e7ded5_prof);

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
/* {% block user_block %}{# Customize this value #}{% endblock %}*/
/* */
