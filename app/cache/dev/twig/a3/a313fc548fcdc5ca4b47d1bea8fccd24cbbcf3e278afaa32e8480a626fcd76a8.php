<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_f484198884ebabdef6091d5aefc1a1a4a740787291656e8ff245f457d037a9c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_538a290e8aeab0d08e275815bc3df9b86084e6191e38a7f7b07f8b343906c781 = $this->env->getExtension("native_profiler");
        $__internal_538a290e8aeab0d08e275815bc3df9b86084e6191e38a7f7b07f8b343906c781->enter($__internal_538a290e8aeab0d08e275815bc3df9b86084e6191e38a7f7b07f8b343906c781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_538a290e8aeab0d08e275815bc3df9b86084e6191e38a7f7b07f8b343906c781->leave($__internal_538a290e8aeab0d08e275815bc3df9b86084e6191e38a7f7b07f8b343906c781_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
