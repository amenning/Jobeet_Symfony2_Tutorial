<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_e08d07982d53274106a39561a83a73cb49fc834330979f3be6d06a3544666b6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_45cc5369390aa05c95c2b5490bd88acf34465b69b56840c7cb43f80d0c3c837e = $this->env->getExtension("native_profiler");
        $__internal_45cc5369390aa05c95c2b5490bd88acf34465b69b56840c7cb43f80d0c3c837e->enter($__internal_45cc5369390aa05c95c2b5490bd88acf34465b69b56840c7cb43f80d0c3c837e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45cc5369390aa05c95c2b5490bd88acf34465b69b56840c7cb43f80d0c3c837e->leave($__internal_45cc5369390aa05c95c2b5490bd88acf34465b69b56840c7cb43f80d0c3c837e_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_9c68514af729e9e0f42c09b4caf78140577efd11677361996eb2fe57218dfb58 = $this->env->getExtension("native_profiler");
        $__internal_9c68514af729e9e0f42c09b4caf78140577efd11677361996eb2fe57218dfb58->enter($__internal_9c68514af729e9e0f42c09b4caf78140577efd11677361996eb2fe57218dfb58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_9c68514af729e9e0f42c09b4caf78140577efd11677361996eb2fe57218dfb58->leave($__internal_9c68514af729e9e0f42c09b4caf78140577efd11677361996eb2fe57218dfb58_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     {{ knp_menu_render(menu, menu_options) }}*/
/* {% endblock %}*/
/* */
