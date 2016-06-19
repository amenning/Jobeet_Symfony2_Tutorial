<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_22a863260f8c8bb5e36415cd381d8b1ca657c736d3be262c5498a6daa3358aae extends Twig_Template
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
        $__internal_c3fe207fbffa1bc3d2ce1dc7222d4da912102381148d886d965476c2aae6db4b = $this->env->getExtension("native_profiler");
        $__internal_c3fe207fbffa1bc3d2ce1dc7222d4da912102381148d886d965476c2aae6db4b->enter($__internal_c3fe207fbffa1bc3d2ce1dc7222d4da912102381148d886d965476c2aae6db4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_c3fe207fbffa1bc3d2ce1dc7222d4da912102381148d886d965476c2aae6db4b->leave($__internal_c3fe207fbffa1bc3d2ce1dc7222d4da912102381148d886d965476c2aae6db4b_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_9cea45f07c6c47f9fe541b55b3ed6edab78596ad8667bcc754e6f284fa005b64 = $this->env->getExtension("native_profiler");
        $__internal_9cea45f07c6c47f9fe541b55b3ed6edab78596ad8667bcc754e6f284fa005b64->enter($__internal_9cea45f07c6c47f9fe541b55b3ed6edab78596ad8667bcc754e6f284fa005b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Logout</a>";
        
        $__internal_9cea45f07c6c47f9fe541b55b3ed6edab78596ad8667bcc754e6f284fa005b64->leave($__internal_9cea45f07c6c47f9fe541b55b3ed6edab78596ad8667bcc754e6f284fa005b64_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block user_block %}<a href="{{ path('logout') }}">Logout</a>{% endblock %}*/
/* */
